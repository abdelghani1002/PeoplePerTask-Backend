-- Active: 1700555979575@@127.0.0.1@3306@peoplepertask
-- Active: 1700478060584@@127.0.0.1@3306@peoplepertask
create database peoplepertask;
use peoplepertask;

alter table users
chna


create table users (
	id int primary key auto_increment,
    `fullName` varchar(255) not null,
    `email` varchar(255) not null,
    `password` varchar(255) not null,
    `job` varchar(255) not null,
    `profil_image_src` varchar(255) not null,
    `city_id` int,
    Foreign Key (city_id) REFERENCES cities(id) on delete set null on update CASCADE
);

create table freelancers (
	id int primary key auto_increment,
    freelancerName varchar(255) unique,
    skills varchar(255),
    reviews int,
    rating DECIMAL(1, 1),
    user_id int UNIQUE,
    FOREIGN KEY (user_id) REFERENCES users(id) on delete CASCADE on update CASCADE
);

insert into freelancers (freelancerName, skills, user_id) values
('phinkens0', 'web design, SEO, skill3', 10),
('avanoort1', 'skill1, skill2, skill3', 8),
('slynch2', 'skill1, skill2, skill3, skill4', 13),
('dtommen3', 'skill1', 7),
('moliver4', 'skill1, skill2, skill3', 9),
('dcorrington5', 'skill1, skill2, skill3, skill4', 6),
('zhealks6', 'skill1, skill2', 4),
('mmcreath7', 'web design, SEO, skill3', 20),
('jcyples8', 'skill1, skill2', 5),
('rkirkup9', 'skill1, skill2, skill3, skill4', 12);

create table testimonials (
	`id` int primary key auto_increment,
    `comment` text not null,
    `user_id` int,
    foreign key (user_id) references users(id) on delete set null on update CASCADE
);

insert into testimonials (comment, user_id) values 
('In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.', 11),
('Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.', 12),
('Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', 13),
('Suspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst.', 4),
('Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.', 5),
('Praesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.', 6),
('Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.', 7),
('Curabitur at ipsum ac tellus semper interdum. Mauris ullamcorper purus sit amet nulla. Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam.', 8),
('In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.', 9),
('Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.', 10);

create table offers (
	id int primary key auto_increment,
    photo_src varchar(255) not null,
    title varchar(255) not null,
    price decimal(10, 2) not null,
    delay time not null,
    freelancer_id int not null,
    FOREIGN KEY (freelancer_id) references freelancers(id) on delete CASCADE on update CASCADE
);

insert into offers(`photo_src`, `title`, `price`, `delay`, `freelancer_id`) VALUES
("../images/offers/offer1.png", "Design Responsive, SEO friendly & Fast Loading WordPress website", 205, "120:00:00", 5),
("../images/offers/offer2.png", "Design Responsive, SEO friendly & Fast Loading WordPress website", 400, "96:00:00", 7),
("../images/offers/offer3.png", "Design Responsive, SEO friendly & Fast Loading WordPress website", 360, "48:00:00", 9),
("../images/offers/offer4.png", "Design Responsive, SEO friendly & Fast Loading WordPress website", 140, "24:00:00", 2),
("../images/offers/offer5.png", "Design Responsive, SEO friendly & Fast Loading WordPress website", 50, "144:00:00", 4);

create table subcategories(
	id int not null primary key auto_increment,
    photo_src varchar(255),
    name varchar(255) not null,
	slogan varchar(255),
    category_id int,
    Foreign Key (categorie_id) REFERENCES subcategories(id) on delete CASCADE on update CASCADE
);

insert into subcategories(`photo_src`, `name`, `slogan`, `categorie_id`) values ("../images/categories/cat13.webp", "Graphic Design", "Bring it to life", null),
("../images/categories/cat1.webp", "Content Writing", "Engage your community", null),
("../images/categories/cat2.webp", "SEO", "Boost your traffic", null),
("../images/categories/cat3.webp", "Website Development", "Build your site", null),
("../images/categories/cat4.webp", "Logo Design", "Elevate your brnad", null),
("../images/categories/cat5.webp", "Voice-over", "Tell your story", null),
("../images/categories/cat6.webp", "Illustration & Drawing", "Picture your idea", null),
("../images/categories/cat7.webp", "Social Media Startegy", "Amplify your network", null),
("../images/categories/cat8.webp", "SEM, Adwords & PPC", "get more customers", null),
("../images/categories/cat9.webp", "Sales & Calls", "Convert more leads", null),
("../images/categories/cat10.webp", "Admin Assistance", "Ease your workload", null),
("../images/categories/cat11.webp", "Videography", "Visualise your story", null),
("../images/categories/cat12.webp", "Translation", "Reach new audiences", null),
("../images/categories/cat13.webp", "Graphic Design", "Bring it to life", null);


create table projects (
	id int not null primary key auto_increment,
    title varchar(255) not null,
    description text not null,
    price decimal(10, 2) not null,
    skills_required varchar(255),
    duration time,
    `status` VARCHAR(50) not null,
    hired_freelancer_id int,
    user_id int not null,
    subcategory_id int,
    Foreign Key (hired_freelancer_id) REFERENCES freelancers(id) on delete set null on update CASCADE,
    FOREIGN KEY (user_id) REFERENCES users(id) on delete CASCADE on update CASCADE,
    FOREIGN KEY (subcategory_id) REFERENCES subcategories(id) on delete set null on update CASCADE
);

INSERT into projects(`title`, `description`, `price`, `skills_required`,  `duration`, `status`,`hired_freelancer_id`, `user_id`, `subcategory_id`) values
("project1", "project1 description", 230, "skill3, skill6", "96:00:00", "incompleted", 4, 1, 3),
("project1", "project1 description", 30, "skill3, skill6", "24:00:00", "completed", 1, 3, 2),
("project1", "project1 description", 330, "skill3, skill6", "72:00:00", "incompleted", 3, 2, 5),
("project1", "project1 description", 70, "skill3, skill6", "24:00:00", "completed", 2, 5, 1),
("project1", "project1 description", 90, "skill3, skill6", "48:00:00", "incompleted", 3, 3, 4);


insert into subcategories(`name`, `category_id`) VALUES
("subcategory1", 3),
("subcategory2", 5),
("subcategory3", 3),
("subcategory4", 2),
("subcategory5", 1),
("subcategory6", 4),
("subcategory7", 5);