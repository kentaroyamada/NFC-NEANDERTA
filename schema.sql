create table customer (
    id int not null primary key auto_increment,
    email text not null unique, -- main identifier
    phone text,
    name text,
    address text
);

-- a kind of product
create table product_type (
    id int not null primary key auto_increment,
    name text, -- e.g: 'Neanderthal Dark'
    description text,
    created datetime not null default now()
);

-- an individual instance of a product
create table product (
    id int not null primary key auto_increment, -- the canonical id, replaces 'decoded'
    product_type_id int not null,
    customer_id int, -- will be null if hasn't been sold yet
    is_sample boolean default false,
    created datetime not null default now(),
    foreign key (product_type_id) references product_type(id),
    foreign key (customer_id) references customer(id)
);

-- historical events relating to an individual instance of a product
create table product_event (
    id int not null primary key auto_increment,
    product_id int not null,
    type enum("tested", "sold", "tagged", "registered", "misc"),
    payload json, -- any extra info about the event, e.g: who tested it, who it was sold to etc
    created datetime not null default now(),
    foreign key (product_id) references product(id)
);