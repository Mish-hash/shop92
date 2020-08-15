@if (session('cart'))
   
    
    <table class="table">
        <thead>
            <tr>
                <th>Img</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Summa</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach (session('cart') as $product)
                <tr>
                    <td><img src="{{ $product['img'] }}" alt="" style="width: 70px"></td>
                    <td>{{$product['name']}}</td>
                    <td>{{$product['price']}}</td>
                    <td>{{$product['qty']}}</td>
                    <td>{{$product['price'] * $product['qty']}}</td>
                    <td>
                        <button class="btn btn-danger btn-cart-delete" data-id="{{ $product['id'] }}">Remove</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4" class="text-right">Total:</td>
                <td colspan="2">{{ session('total') }}</td>
            </tr>
        </tfoot>
    </table>

    
  
@else
    Cart is empty :(
@endif