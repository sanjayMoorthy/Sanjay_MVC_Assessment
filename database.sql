CREATE DATABASE product_management;

CREATE TABLE prodect_details(
    id int not null AUTO_INCREMENT,
   prodect_name varchar(255),
   prodect_image varchar(255),
   prodect_sku varchar(255),
   prodect_price int,
   prodect_brand varchar(255),
   prodect_mfd varchar(255),
   prodect_available_stock int,
   created_at timestamp,
   updated_at timestamp,
   PRIMARY KEY (id)
 );