# Endeavor Shoes Store

<ul>
    <li>Project Language : Indonesian</li>
    <li>This is a simple website built by HTML, PHP, and MySql</li>
    <li>This project is made for fulfill the Database Subject in Informatics Major at Institut Teknologi Indonesia</li>
</ul>
<h3>Introduction</h3>
<p>Endeavor is a store for selling shoes product in Indonesia. 
It has the main page, login page, admin page, and cart page.<br> 
The development of this project is not completed yet.
It contains the login process, product input, product checkout, but it doesn't has any verification system to check the payment.
</p>
<h3>ERD</h3>
<img src="https://github.com/NissaMutia/toko_sepatu_endeavor/blob/main/ERD.jpg">
<p>There are 7 tables used in this simple website, <i>user, user_bio, user_kode, data_pesan, stok, stok_desc,</i> and <i>stok_ukuran</i>.</p>
<ul>
    <li>user</li>
    <p>This table consist of username, code, and password. This table is linked to user_bio table.</p>
    <li>user_bio</li>
    <p>This table consist of full data of a person including the username, real name, email, address, city, zipcode, and also phone number. This table linked to user table.</p>
    <li>user_kode</li>
    <p>This table consist of only name and code.</p>
    <li>data_pesan</li>
    <p>This table consist of order id as the primary key, username, date, name, address, city, zipcode, product id, the number of item, size, and total price. This table linked to user table (to get the username and user biodata) and stock table (to get the information of the product)</p>
    <li>stok</li>
    <p>This table consist of product id, brand, type of prodyct, price, and image. It linked to stok_desc table and stok_ukuran table.</p>
    <li>stok_desc</li>
    <p>This table consist of product id, long description of the product, and short description of the product. Long description used to describe the product as complete as possible while short description used to get user attention to buy the product. This table linked to stok table.</p>
    <li>stok_ukuran</li>
    <p>This table consist of product id, size, and the number of product. Every product id have different size and different stock for every size. This table linked to stok table.</p>
</ul>
<br>
<h3>PAGES FOR USER</h3>
<p>The Endeavor Shoes Store Website Screenshoot :</p>
<table>
      <tr>
            <th>No.</th>
            <th>Pictures</th>
            <th>Description</th>
      </tr>
      <tr>
            <td>1</td>
            <td><img src="https://github.com/NissaMutia/toko_sepatu_endeavor/blob/main/Screencapture/home_index.png" alt="homepage"></td>
            <td>This is the <b>homepage of the website</b>. User can see the products and the price at the first time they enter the site.
            We chose brown and red for the color to fit the logo color.<br><br>At the top-right of the site we can see the login/register button.
            User that already put some shoes to the cart can login and processing their purchase.</td>
      </tr>
      <tr>
            <td>2</td>
            <td><img src="https://raw.githubusercontent.com/NissaMutia/toko_sepatu_endeavor/main/Screencapture/produk.png" alt="product"></td>
            <td>When new user click the product that they want to buy, they will come to <b>product page</b>. The product page will show the picture, name, description, price,               shoes size option, how many product they want to buy, and an "buy it now" button.<br><br>When new user goes to this page, the word "Hello <code>username</code>"                 will not show up.</td>
      </tr>
      <tr>
            <td>3</td>
            <td><img src="https://github.com/NissaMutia/toko_sepatu_endeavor/blob/main/Screencapture/login.png" alt="product"></td>
          <td>If the user isn't login yet, they will go to <b>login page</b>. If they have an account, they can login by write their username and password. If they don't have any account, they have to click on 'register' button. The register page will show up.</td>
      </tr>
      <tr>
            <td>4</td>
            <td><img src="https://github.com/NissaMutia/toko_sepatu_endeavor/blob/main/Screencapture/daftar.png" alt="product"></td>
          <td>This is the <b>register page</b>. User have to fill all the field to make an account. After the account is made, login page will show up. New user have to login with their new account.</td>
      </tr>    
      <tr>
            <td>5</td>
            <td><img src="https://github.com/NissaMutia/toko_sepatu_endeavor/blob/main/Screencapture/home_session.png" alt="product"></td>
          <td>After user login, the homepage will show their username at the top-center. Now they can put shoes into their cart and do the transaction.</td>
      </tr>    
      <tr>
            <td>6</td>
            <td><img src="https://github.com/NissaMutia/toko_sepatu_endeavor/blob/main/Screencapture/checkout.png" alt="product"></td>
          <td>User have to select the product they want to buy, fill the product page, and add it to cart. This is the <b>Cart Page</b>. In this page, user will see all of the product that they want to buy.</td>
      </tr>    
      <tr>
            <td>7</td>
            <td><img src="https://github.com/NissaMutia/toko_sepatu_endeavor/blob/main/Screencapture/form_beli.png" alt="product"></td>
          <td>This is the <b>buying form</b>. After collecting all the product that they want to buy, they will have to do the product transaction. This is a very simple website, user only can checkout one product at a time. For future development, user can buy a lot of product at a time.</td>
      </tr>         
    <tr>
            <td>8</td>
            <td><img src="https://github.com/NissaMutia/toko_sepatu_endeavor/blob/main/Screencapture/confirm.png" alt="product"></td>
          <td>This is the <b>confirm</b> page. It means that the transaction now is processed by the admin. In future development, I hope this page also give the information about what should user do to completing their transaction.</td>
      </tr>   
</table>
<br>
<h3>PAGES FOR ADMIN</h3>
<table>
    <tr>
         <th>No.</th>
         <th>Pictures</th>
         <th>Description</th>
     </tr>
        <tr>
            <td>1</td>
            <td><img src="https://github.com/NissaMutia/toko_sepatu_endeavor/blob/main/Screencapture/admin_barang.png" alt="product"></td>
          <td>This is the first page that will appear when admin login to the website. This is the <b>admin product page</b>.<br><br>at the left side, there is a navigator to ther order page and size stock page.</td>
      </tr>   
        <tr>
            <td>2</td>
            <td><img src="https://github.com/NissaMutia/toko_sepatu_endeavor/blob/main/Screencapture/admin_barang_edit.png" alt="product"></td>
            <td>This is the <b>product edit page</b>. In this page, admin can see all the product in the website. Admin can also edit the description, price, or anything about the product.</td>
      </tr>   
        <tr>
            <td>3</td>
            <td><img src="https://github.com/NissaMutia/toko_sepatu_endeavor/blob/main/Screencapture/admin_data_pesan.PNG" alt="product"></td>
            <td><b>This is the order page</b>. In this page, admin can see the order and make the order as soon as possible.<br><br>In the future development, I hope this page could also see which product is paid, so the seller can process only the paid one and make an automatic delete if order is unpaid for several days.</td>
      </tr>  
        <tr>
            <td>4</td>
            <td><img src="https://github.com/NissaMutia/toko_sepatu_endeavor/blob/main/Screencapture/admin_ukuran.png" alt="product"></td>
            <td>This is the <b>product stock page</b>. In this page, admin can see the stock for every size in every product.</td>
      </tr>  
         <tr>
            <td>5</td>
            <td><img src="https://github.com/NissaMutia/toko_sepatu_endeavor/blob/main/Screencapture/admin_ukuran_edit.png" alt="product"></td>
          <td>This is the edit stock page. Admin can update the product stock in this page. Everytime concument buy a product, the stock will be decrease. If the stock is zero, the size option will be unavailable. If all the size in a product is empty, the product will be dissapear from the homepage.</td>
      </tr>  
</table>
