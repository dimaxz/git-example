<?

/**
 * Description of User
 *
 * @author Admin
 */
class User
{
    
    protected $name;


    /**
     * 
     * @return string
     */
    function getName(): string
    {
        return $this->name;
    }

    /**
     * 
     * @param type $name
     * @return $this
     */
    function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }
    
    /**
     * создание
     * @return array
     */
    public static function createUsers(): array {
        $users = $dataUsers = [];
        $users []= "Шевченко А.С." ;
        $users [] = "Новиков А.Э.";
        $users [] = "Сморкалова Д.С.";
        $users []= "Пенкин Ф.В." ;
        $users []= "Коршунов А.В.";
        foreach($users as $userName){
            $dataUsers[]= (new User())->setName($userName);
        }
        
        return $dataUsers;
    }
    
}
