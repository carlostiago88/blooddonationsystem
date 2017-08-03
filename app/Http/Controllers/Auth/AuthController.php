
namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AuthController extends Controller
{
    protected $redirectTo = '/';

    public function authenticate(Request $request)
    {
        $email = $request->input('email');

        //$email = Input::get('email');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password, 'is_active' => 1])) {
            // Authentication passed...
            redirect('/');
        }
    }
}
