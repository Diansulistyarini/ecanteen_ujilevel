

<form method="post" action="/order/menu">
        
    {{ csrf_field() }}
    
     <div class="form-group">
    
    <div class="form-group">
        <input type="hidden" name="id" value="{{$menus->id_menu}}"> 
    </div>    

    <div class="form-group">

    <div class="form-group">
        <input type="hidden" name="menu_name" value="{{$menus->menu_name}}"> 
    </div>

    <div class="form-group">

    <div class="form-group">
        <input type="text" name="id_user" placeholder="Pemesan"> 
    </div>  

    <div class="form-group">

    <div class="form-group">
        <input type="number" name="order_amount" placeholder="Order Amount"> 
    </div>  
    
    <div class="form-group">
        <input type="hidden" name="harga" value="{{$menus->price}}"> 
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-success" value="buy">
    </div>
    </form>