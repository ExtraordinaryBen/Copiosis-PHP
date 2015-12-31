namespace App\Controller\Component;

use Cake\Controller\Component;

class SignupKeyComponent extends Component
{
    public function GetToken()
    {
        //Dynamically Loading the model.
        App::import('Model', 'Location');
        $this->Menu = new Location();
        return $this->Location->field('signupKey', array('id' => 1));
    }
}
