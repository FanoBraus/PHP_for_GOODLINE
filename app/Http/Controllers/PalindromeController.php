<?php

namespace App\Http\Controllers;

use App\Http\Requests\PalindromeRequest;
use App\Services\PalindromeService;

class PalindromeController extends Controller
{
    private $palindromeService;

    public function __construct(PalindromeService $palindromeService)
    {
        $this->palindromeService = $palindromeService;
    }

    public function testPalindrome(PalindromeRequest $palindromeRequest)
    {
        $result = $this->palindromeService->PalindromeCheck($palindromeRequest->string);

        return response($result, 200);
    }
}
