use DTApi\Helpers\TeHelper;

class TeHelperWillExpireAtTest
{
    public function testWillExpireAtWithin90Hours()
    {
        $dueTime = '2023-06-20 12:00:00';
        $createdAt = '2023-06-20 08:00:00';
        $expectedResult = '2023-06-20 12:00:00';

        $result = TeHelper::willExpireAt($dueTime, $createdAt);

        $this->assertEquals($expectedResult, $result);
    }

    public function testWillExpireAtWithin24Hours()
    {
        $dueTime = '2023-06-20 12:00:00';
        $createdAt = '2023-06-20 08:00:00';
        $expectedResult = '2023-06-20 09:30:00';

        $result = TeHelper::willExpireAt($dueTime, $createdAt);

        $this->assertEquals($expectedResult, $result);
    }

    public function testWillExpireAtMoreThan24AndWithin72Hours()
    {
        $dueTime = '2023-06-18 12:00:00';
        $createdAt = '2023-06-16 10:00:00';
        $expectedResult = '2023-06-18 02:00:00';

        $result = TeHelper::willExpireAt($dueTime, $createdAt);

        $this->assertEquals($expectedResult, $result);
    }

    public function testWillExpireAtMoreThan72Hours()
    {
        $dueTime = '2023-06-20 12:00:00';
        $createdAt = '2023-06-15 08:00:00';
        $expectedResult = '2023-06-18 20:00:00';

        $result = TeHelper::willExpireAt($dueTime, $createdAt);

        $this->assertEquals($expectedResult, $result);
    }
}