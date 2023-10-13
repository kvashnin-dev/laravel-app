./vendor/bin/sail up --build
.env
./vendor/bin/sail artisan migrate    
./vendor/bin/sail artisan db:seed    

./vendor/bin/sail npm install 
