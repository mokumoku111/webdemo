CREATE TABLE UserAdmin(
	Admin_ID INTEGER NOT NULL PRIMARY KEY,
	Admin_Name VARCHAR(15) NOT NULL,
	Admin_Username VARCHAR(5) NOT NULL,
	Admin_Password VARCHAR(6) NOT NULL
);
CREATE TABLE Member(
	Member_ID INTEGER NOT NULL PRIMARY KEY,
	Member_Fname VARCHAR(15) NOT NULL,
	Member_Lname VARCHAR(15) NOT NULL,
	Member_PhoneNumber INTEGER,
	Member_IDCard INTEGER NOT NULL,
	Member_Age INTEGER,
	Member_Username VARCHAR(20),
	Member_Password VARCHAR(20)
);
CREATE TABLE Member_Type(
	MemType_ID INTEGER(3) NOT NULL PRIMARY KEY,
	MemType_Name VARCHAR(15) NOT NULL,
	MemType_Detail VARCHAR(256)
);
CREATE TABLE Officer(
	Officer_ID INTEGER NOT NULL PRIMARY KEY,
	Officer_Fname VARCHAR(15) NOT NULL,
	Officer_Lname VARCHAR(15) NOT NULL,
	Officer_PhoneNumber INTEGER,
	Officer_Role VARCHAR(15) NOT NULL, -- ตำแหน่ง / หน้าที่ของเจ้าหน้าที่
	Officer_StartTime DATETIME NOT NULL, -- เวลาเริ่มทำงาน
	Officer_EndTime DATETIME NOT NULL, -- เวลาเลิกงาน
	Officer_Username VARCHAR(20),
	Officer_Password VARCHAR(20)
);
CREATE TABLE PoolStatus(
	PoolStatus_ID INTEGER NOT NULL PRIMARY KEY,
	PoolStatus_OpenTime TIME NOT NULL,
	PoolStatus_CloseTime TIME NOT NULL,
	PoolStatus_Status BIT NOT NULL -- 1เปิด 0ปิด
);
CREATE TABLE Servive_Charge(
	SCharge_ID INTEGER NOT NULL PRIMARY KEY,
	SCharge_Price DOUBLE,
	SCharge_Detail VARCHAR(256) -- รายละเอียดค่าบริการ
);
CREATE TABLE Reserve(
	Reserve_ID INTEGER NOT NULL,
	Reserve_Detail VARCHAR(256),
	Reserve_DateReserve DATE NOT NULL,
	Reserve_StartReserve DATETIME NOT NULL,
	Reserve_EndReserve DATETIME NOT NULL,
	Reserve_Status BIT NOt NULL, -- 0 = Waiting, 1 = Confirmed
	Member_ID INTEGER  NOT NULL,
	MemType_ID INTEGER(3) NOT NULL,
	Officer_ID INTEGER NOT NULL,
	PoolStatus_ID INTEGER NOT NULL,
	SCharge_ID INTEGER NOT NULL,
	CONSTRAINT Reserve_ID_PK PRIMARY KEY (Reserve_ID),
	CONSTRAINT Officer_ID_FK
	FOREIGN KEY (Officer_ID) REFERENCES Officer(Officer_ID),
	CONSTRAINT Member_ID_FK
	FOREIGN KEY (Member_ID) REFERENCES Member(Member_ID),
	CONSTRAINT PoolStatus_ID_FK
	FOREIGN KEY (PoolStatus_ID) REFERENCES PoolStatus(PoolStatus_ID),
	CONSTRAINT SCharge_ID_FK
	FOREIGN KEY (SCharge_ID) REFERENCES Servive_Charge(SCharge_ID),
	CONSTRAINT MemType_ID_FK
	FOREIGN KEY (MemType_ID) REFERENCES Member_Type(MemType_ID)
);

