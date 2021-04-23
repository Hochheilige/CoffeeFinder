<?php 

namespace models;
use core\db\DbModel;

class FindCafeModel extends DbModel {

    // Input 
    public string $cafename    = '';
    public string $district    = '';
    public string $metro       = '';
    public string $product     = '';

    // Output after find cafe
    public array $foundData = [];
    public const NOT_FOUND = "There is nothing in database on this query"; 

    public function rules(): array {
        return [];
    }

    public static  function tableName() : string {
        return 'cafe';
    }

    public function attributes() : array {
        return ['cafe_name', 'brand_id', 'district_id', 'adress'];
    }

    public function labels(): array {
        return [
            'cafename' => 'Название кофейни',
            'district' => 'Район',
            'metro'    => 'Станция метро',
            'product'  => 'Продукт'
        ];
    }

    public static function primaryKey(): string {
        return 'cafe_id';
    }

    public static function findOne($where) {
        $tableName = self::tableName();
        $where = array_diff($where, array(''));
        $where = self::getPseudoName($where);

        if (empty($where)) {
            return false;
        }
 
        $attributes = array_keys($where);

        $sqlAttr = implode(" AND ", array_map(fn($attr) => "$attr =  :".substr($attr, strpos($attr, ".")+1), $attributes));
        $sqlAttr .= ' GROUP BY c.adress';

        $sql = "
            SELECT b.brand_name as BrandName, 
                   c.adress as Adress, m.station_name as Station, chm.distance as Distance, chm.time_min as Time
            FROM cafe c  
            JOIN brand b on b.brand_id = c.brand_id
            JOIN district ds on ds.district_id = c.district_id
            JOIN cafe_has_metro chm on chm.cafe_id = c.cafe_id    
            JOIN metro m on m.metro_id = chm.metro_id
            JOIN cafe_has_menu chmen on chmen.cafe_id = c.cafe_id
            JOIN menu men on men.menu_id = chmen.menu_id  
            JOIN products_group pg on pg.menu_id = men.menu_id
            JOIN products p on p.product_id = pg.product_id

            WHERE $sqlAttr";

        $statement = self::prepare($sql);

        foreach($where as $key => $value) {
            $statement->bindValue(":".substr($key, strpos($key, ".")+1), $value);
        }
        
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function find() {
        $cafes = self::findOne([
            'cafe_name' => $this->cafename,
            'name_district' => $this->district,
            'station_name'    => $this->metro,
            'product'  => $this->product
        ]);
        if($cafes) {
            foreach($cafes as $values) {
                array_push($this->foundData, $values);
            }
        } else {
            $this->addError('found', self::NOT_FOUND);
        }
    }

    private static function getPseudoName($attributes) {
        $where = [];
        foreach($attributes as $key => $value) {
            switch ($key) {
            case 'cafe_name':
                $where['c.'.$key] = $value;
                break;
            case 'name_district':
                $where['ds.'.$key] = $value;
                break;
            case 'station_name':
                $where['m.'.$key] = $value;
                break;
            case 'product':
                $where['p.'.$key] = $value;
                break;
            }
        }
        return $where;
    }

    public function save() {
        
    }

}

?>