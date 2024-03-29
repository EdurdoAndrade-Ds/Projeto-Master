<?php

namespace app\models\activerecord;

use app\models\connection\Connection;
use app\interfaces\ActiveRecordInterface;
use app\interfaces\ActiveRecordExecuteInterface;
use Throwable;

class FindBy implements ActiveRecordExecuteInterface
{
    public function __construct(private string $fields = '*')
    {
    }
    

    public function execute(ActiveRecordInterface $activeRecordInterface)
    {

        return require '../app/helpers/user.php';

        // try {
        //     $query = $this->createQuery($activeRecordInterface);

        //     $connection = Connection::connect();

        //     $prepare = $connection->prepare($query);
        //     $prepare->execute([
        //         $this->field => $this->value
        //     ]);

        //     return $prepare->fetch();
        // } catch (Throwable $throw) {
        //     formatException($throw);
        // }
    }

    private function createQuery(ActiveRecordInterface $activeRecordInterface)
    {
        $sql = "select {$this->fields} from {$activeRecordInterface->getTable()} where {$this->field} = :{$this->field}";
        return $sql;
    }
}
