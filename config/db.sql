CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) UNIQUE NOT NULL,
    image Text NOT NULL,
    password TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE products (
    id SERIAL PRIMARY KEY,         
    name VARCHAR(255) NOT NULL,    
    description TEXT,              
    image TEXT,              
    price DECIMAL(10,2) NOT NULL,  
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
);


