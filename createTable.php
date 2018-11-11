<?php
$connection = mysqli_connect('localhost','root','');
mysqli_select_db($connection,'VIBERNETS_DB')or die("Error occurred");

# Student table
$sql="create table if not exists student
(std_ID 	int,
    title varchar(20) not null,
	first_name	varchar(50) not null,
	mid_name	varchar(50),
	last_name	varchar(50),
	gender		varchar(10),
	DoB		date not null,
	NIC varchar(20),
	address varchar(300),
	district		varchar(100),
	mobile varchar(50),
	land_phone varchar(50),
	email varchar(200),
	workplace varchar(300),
	designation varchar(200),
	registrationPaid varchar(10),
	paymentNote text,
	application blob,
	primary key(std_ID),
	check (registrationPaid in ('paid','notPaid')),
	check (gender in ('male','female')))";
$retval = mysqli_query(  $connection, $sql );
if(! $retval ) {
    die('Could not create table student: ');
}
echo "Table student created successfully\n";

# Admin table
# adminone : a2a63fc5929ce057ce5f6051343245a4
# admintwo : ac0fdab61cb32ec48f9c02ed6d14ad8f
$sql="create table if not exists admin
(admin_ID 	varchar(20),
    full_name	varchar(255) not null,
	primary key(admin_ID))";
$retval = mysqli_query(  $connection, $sql );
if(! $retval ) {
    die('Could not create table admin: ');
}
echo "Table admin created successfully\n";

# Login table
$sql="Create table if not exists login
(username		varchar(100),
	 pwd			varchar(250) not null,
	u_ID 			varchar(20),
	user_type   varchar(20),
	user_status  varchar(20),
	primary key(username))";
$retval = mysqli_query(  $connection, $sql );
if(! $retval ) {
    die('Could not create table login: ');
}
echo "Table login created successfully\n";


# Course table
$sql="create table if not exists course
(course_ID varchar(30),
    course_name varchar(200),
    coursefee float,
    deadline date,
	primary key(course_ID))";
$retval = mysqli_query(  $connection, $sql );
if(! $retval ) {
    die('Could not create table course: ');
}
echo "Table course created successfully\n";

# Batch table
$sql="create table if not exists batch
(batch_No varchar(30),
    course_ID varchar(30),
    student_count int DEFAULT 0,
    start_date date not null,
    end_date date not null,
	primary key(batch_No,course_ID),
	foreign key (course_ID) references course(course_ID)
	on delete cascade)";
$retval = mysqli_query(  $connection, $sql );
if(! $retval ) {
    die('Could not create table batch: ');
}
echo "Table batch created successfully\n";

# Take table
$sql="create table if not exists take
(   std_ID int,
    course_ID varchar(30),
    batch_No varchar(30),
    fee float,
	primary key(std_ID,batch_No,course_ID),
	foreign key (std_ID) references student(std_ID)
	on delete cascade,
	foreign key (course_ID) references course(course_ID)
	on delete cascade,
	foreign key (batch_No) references batch(batch_No)
	on delete cascade)";
$retval = mysqli_query(  $connection, $sql );
if(! $retval ) {
    die('Could not create table take: ');
}
echo "Table take created successfully\n";

# Payment table
$sql="create table if not exists payment
(   payment_ID int NOT NULL AUTO_INCREMENT, 
    std_ID int,
    course_ID varchar(30),
    batch_No varchar(30),
    amount float not null,
    date_paid date not null,
	primary key(payment_ID),
	foreign key (std_ID) references student(std_ID)
	on delete cascade,
	foreign key (course_ID) references course(course_ID)
	on delete cascade,
	foreign key (batch_No) references batch(batch_No)
	on delete cascade)";
$retval = mysqli_query(  $connection, $sql );
if(! $retval ) {
    die('Could not create table payment: ');
}
echo "Table payment created successfully\n";

# Attendance table
$sql="create table if not exists attendance
(   std_ID int,
    course_ID varchar(30),
    batch_No varchar(30),
    class_date date,
    attendance int,
	primary key(std_ID,batch_No,course_ID,class_date),
	foreign key (std_ID) references student(std_ID)
	on delete cascade,
	foreign key (course_ID) references course(course_ID)
	on delete cascade,
	foreign key (batch_No) references batch(batch_No)
	on delete cascade)";
$retval = mysqli_query(  $connection, $sql );
if(! $retval ) {
    die('Could not create table attendance: ');
}
echo "Table attendance created successfully\n";

# income and expense table
$sql="create table if not exists incomeexpense
(   transaction_ID int NOT NULL AUTO_INCREMENT, 
    transaction_type varchar(20) not null,
    description varchar(255) not null,
    amount float not null,
    transaction_date date not null,
	primary key(transaction_ID)
	)";
$retval = mysqli_query(  $connection, $sql );
if(! $retval ) {
    die('Could not create table income-expense: ');
}
echo "Table income-expense created successfully\n";

# Admission table
$sql="create table if not exists admission
(   adm_ID int NOT NULL AUTO_INCREMENT, 
    std_ID int,
    amount float not null,
    date_paid date not null,
	primary key(adm_ID),
	foreign key (std_ID) references student(std_ID)
	on delete cascade)";
$retval = mysqli_query(  $connection, $sql );
if(! $retval ) {
    die('Could not create table admission: ');
}
echo "Table admission created successfully\n";

?>

