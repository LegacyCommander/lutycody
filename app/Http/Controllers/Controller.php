<?php

namespace App\Http\Controllers;


/**
 * @OA\Info(
 *     version="1.0.0",
 *     title="API",
 *     description="sasha",
 *     @OA\Contact(
 *         email="donetskkmt@gmail.com"
 *     ),
 *     @OA\License(
 *         name="MIT",
 *         url="https://opensource.org/licenses/MIT"
 *     )
 * )
 *
 * @OA\Server(
 *     url="http://localhost:8000",
 *     description="Local server"
 * )
 *
 * @OA\SecurityScheme(
 *     securityScheme="bearerAuth",
 *     type="http",
 *     scheme="bearer",
 *     bearerFormat="JWT",
 *     description="Cvj3nJcQe7djyjY818woxct9yTIF4zqQCaKfR03ng9fX1DMiSVjIwxi7qhruGO6M"
 * )
 */
abstract class Controller
{
    //
}
