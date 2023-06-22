use DTApi\Repositories\UserRepository;

class UserCreateOrUpdateTest
{
    protected $userData = [
            'role' => 'customer',
            'name' => 'test',
            'email' => 'test@example.com',
            'dob_or_orgid' => '1995-05-10',
            'phone' => '987654321',
            'mobile' => '123456789',
            'password' => 'pass123',
            'translator_type' => 'freelance',
            'worked_for' => 'no',
            // due to time, I have written some required data
        ];
    public function testCreateOrUpdateForNewUser()
    {
        $userRepository = new UserRepository();
        $id = null;
        $request = $this->userData;
        $expectedResult = true;

        $result = $userRepository->createOrUpdate($id, $request);

        $this->assertEquals($expectedResult, $result);
    }

    public function testCreateOrUpdateForExistingUser()
    {
        $userRepository = new UserRepository();
        $id = 2;
        $request = $this->userData;
        $expectedResult = true;
        
        $result = $userRepository->createOrUpdate($id, $request);

        $this->assertEquals($expectedResult, $result);
    }

    public function testCreateOrUpdateWithInvalidData()
    {
        $userRepository = new UserRepository();
        $id = null;
        $request = [];
        $expectedResult = false;

        $result = $userRepository->createOrUpdate($id, $request);

        $this->assertEquals($expectedResult, $result);
    }
}