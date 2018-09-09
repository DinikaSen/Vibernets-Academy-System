<?php
$connection = mysqli_connect('localhost','root','');
mysqli_select_db($connection,'VIBERNETS_DB')or die("Error occurred");

# Student table
$sql="create table if not exists student
(std_ID 	varchar(20),
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
	application blob,
	primary key(std_ID),
	check (gender in ('male','female')))";
$retval = mysqli_query(  $connection, $sql );
if(! $retval ) {
    die('Could not create table student: ');
}
echo "Table student created successfully\n";

# Course table
$sql="create table if not exists course
(course_ID varchar(30),
    course_name varchar(200),
    coursefee float,
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
(   std_ID varchar(20),
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
(   std_ID varchar(20),
    course_ID varchar(30),
    batch_No varchar(30),
    amount float not null,
    payed_date date not null,
	primary key(std_ID,batch_No,course_ID),
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
(   std_ID varchar(20),
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
?>

