# Getting Started with Project Technical Test Backend Inosoft
This project was created using laravel

## TODO:
#### RUN SEEDING
php artisan db:seed

#### RUN SERVER BACKEND
php artisan serve

#### TESTING SERVER BACKEND
The endpoint require Authorization Bearer Token. So You should register first, then login to get the token. 
You can also login using data user on database (password value = "secret")

##### STEP TO GET TOKEN
1. Hit endpoint register (Create user first)
2. Hit endpoint login

##### LIST ENDPOINT
1. Lihat stok kendaraan
http://127.0.0.1:8000/api/inventories

2. Penjualan kendaraan
http://127.0.0.1:8000/api/orderItems

3. Laporan penjualan per kendaraan
http://127.0.0.1:8000/api/orderItems/vehicle/{{vehicleId}}

Link Collection Endpoint
https://api.postman.com/collections/7412551-8685bfda-85da-4901-a822-ed5672d3ed04?access_key=PMAT-01GVXHP60Y8BTT383RG1Q4997Q
