<?php

    namespace App\Http\Controllers;

 
    use App\Models\Product;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;
    use JWTAuth;
    use Tymon\JWTAuth\Exceptions\JWTException;

    class UserController extends Controller
    {
        public function authenticate(Request $request)
        {
            $credentials = $request->only('email', 'password');

            try {
                if (! $token = JWTAuth::attempt($credentials)) {
                    return response()->json(['error' => 'invalid_credentials'], 400);
                }
            } catch (JWTException $e) {
                return response()->json(['error' => 'could_not_create_token'], 500);
            }

            return response()->json(compact('token'));
        }

      

            public function product_list(Request $request)
            {


                    try {


                        $product = Product::with('brand')
                        ->orderBy('created_at','desc')->where('isDeleted','0');

                        if ($request->has('name')) {
                            $product->where('name', $request->name);
                        }


                        $product=$product->get();
                        
                        
                            if (! $product) {
                                    return response()->json(['list_not_found'], 404);
                            }

                    } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

                            return response()->json(['token_expired'], $e->getStatusCode());

                    } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

                            return response()->json(['token_invalid'], $e->getStatusCode());

                    } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

                            return response()->json(['token_absent'], $e->getStatusCode());

                    }

                    
        return response()->json([
            'msg' => 'data found...!',
            'data' =>  $product,
           ],200);
            }
    }