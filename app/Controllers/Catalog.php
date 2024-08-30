<?php

namespace App\Controllers;

class Catalog extends BaseController
{

    public function productLookUpById(int $id)
    {
        $headers = array('Content-Type : application/json');
        $curl = curl_init('https://dummyjson.com/products');
        curl_setopt($curl, CURLOPT_HTTPHEADER , $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)');
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);


        $data = json_decode($response,true);
        return view('product', $data['products'][$id-1]);
    }

    public function productsLookUpByCategory(string $cat)
    {
        $headers = array('Content-Type : application/json');
        $curl = curl_init('https://dummyjson.com/products');
        curl_setopt($curl, CURLOPT_HTTPHEADER , $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)');
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        
        $data = json_decode($response,true);

        $data['products'] = array_filter($data['products'], fn($product) =>
            $product['category'] === $cat
        );

        return view('products', $data);
    }
}


