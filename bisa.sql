--------------------------------------------------------
--  File created - Thursday-February-25-2021   
--------------------------------------------------------
DROP SEQUENCE "HR"."CATEGORY_SEQ";
DROP SEQUENCE "HR"."CILOGINAPP_SEQ";
DROP SEQUENCE "HR"."DEPARTMENTS_SEQ";
DROP SEQUENCE "HR"."DIVISI_SEQ";
DROP SEQUENCE "HR"."EMPLOYEES_SEQ";
DROP SEQUENCE "HR"."LOCATIONS_SEQ";
DROP SEQUENCE "HR"."PARKING_AREA_SEQ";
DROP SEQUENCE "HR"."PARKING_SEQ";
DROP SEQUENCE "HR"."STATUS_SEQ";
DROP SEQUENCE "HR"."STATUS_SEQ1";
DROP SEQUENCE "HR"."SUB_CATEGORY_SEQ";
DROP SEQUENCE "HR"."TEKNISI_SEQ";
DROP SEQUENCE "HR"."TICKET_SEQ";
DROP SEQUENCE "HR"."TICKET_SEQ1";
DROP SEQUENCE "HR"."TICKET_SEQ2";
DROP SEQUENCE "HR"."TICKET_SEQ3";
DROP SEQUENCE "HR"."TRANSPOR_SEQ";
DROP SEQUENCE "HR"."USER_ACCESS_MENU_SEQ";
DROP SEQUENCE "HR"."USER_MENU_SEQ";
DROP SEQUENCE "HR"."USER_ROLE_SEQ";
DROP SEQUENCE "HR"."USER_SUB_MENU_SEQ";
DROP SEQUENCE "HR"."USER_SYS_SEQ";
DROP SEQUENCE "HR"."USER_TOKEN_SEQ";
DROP TABLE "HR"."CATEGORY";
DROP TABLE "HR"."DIVISI";
DROP TABLE "HR"."STATUS";
DROP TABLE "HR"."STATUS_TICKET";
DROP TABLE "HR"."TECHNICIAN";
DROP TABLE "HR"."TICKET";
DROP TABLE "HR"."USER_ACCESS_MENU";
DROP TABLE "HR"."USER_MENU";
DROP TABLE "HR"."USER_ROLE";
DROP TABLE "HR"."USER_SUB_MENU";
DROP TABLE "HR"."USER_SYS";
DROP TABLE "HR"."USER_TOKEN";
DROP VIEW "HR"."EMP_DETAILS_VIEW";
DROP PROCEDURE "HR"."ADD_JOB_HISTORY";
DROP PROCEDURE "HR"."SECURE_DML";
--------------------------------------------------------
--  DDL for Sequence CATEGORY_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "HR"."CATEGORY_SEQ"  MINVALUE 1 MAXVALUE 999999999999999999999999999 INCREMENT BY 1 START WITH 1 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence CILOGINAPP_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "HR"."CILOGINAPP_SEQ"  MINVALUE 1 MAXVALUE 999999999999999999999999999 INCREMENT BY 1 START WITH 61 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence DEPARTMENTS_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "HR"."DEPARTMENTS_SEQ"  MINVALUE 1 MAXVALUE 9990 INCREMENT BY 10 START WITH 280 NOCACHE  NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence DIVISI_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "HR"."DIVISI_SEQ"  MINVALUE 1 MAXVALUE 999999999999999999999999999 INCREMENT BY 1 START WITH 1 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence EMPLOYEES_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "HR"."EMPLOYEES_SEQ"  MINVALUE 1 MAXVALUE 999999999999999999999999999 INCREMENT BY 1 START WITH 207 NOCACHE  NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence LOCATIONS_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "HR"."LOCATIONS_SEQ"  MINVALUE 1 MAXVALUE 9900 INCREMENT BY 100 START WITH 3300 NOCACHE  NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence PARKING_AREA_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "HR"."PARKING_AREA_SEQ"  MINVALUE 1 MAXVALUE 999999999999999999999999999 INCREMENT BY 1 START WITH 21 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence PARKING_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "HR"."PARKING_SEQ"  MINVALUE 1 MAXVALUE 999999999999999999999999999 INCREMENT BY 1 START WITH 21 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence STATUS_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "HR"."STATUS_SEQ"  MINVALUE 1 MAXVALUE 999999999999999999999999999 INCREMENT BY 1 START WITH 21 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence STATUS_SEQ1
--------------------------------------------------------

   CREATE SEQUENCE  "HR"."STATUS_SEQ1"  MINVALUE 1 MAXVALUE 999999999999999999999999999 INCREMENT BY 1 START WITH 1 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence SUB_CATEGORY_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "HR"."SUB_CATEGORY_SEQ"  MINVALUE 1 MAXVALUE 999999999999999999999999999 INCREMENT BY 1 START WITH 1 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence TEKNISI_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "HR"."TEKNISI_SEQ"  MINVALUE 1 MAXVALUE 999999999999999999999999999 INCREMENT BY 1 START WITH 1 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence TICKET_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "HR"."TICKET_SEQ"  MINVALUE 1 MAXVALUE 999999999999999999999999999 INCREMENT BY 1 START WITH 1 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence TICKET_SEQ1
--------------------------------------------------------

   CREATE SEQUENCE  "HR"."TICKET_SEQ1"  MINVALUE 1 MAXVALUE 999999999999999999999999999 INCREMENT BY 1 START WITH 1 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence TICKET_SEQ2
--------------------------------------------------------

   CREATE SEQUENCE  "HR"."TICKET_SEQ2"  MINVALUE 1 MAXVALUE 999999999999999999999999999 INCREMENT BY 1 START WITH 21 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence TICKET_SEQ3
--------------------------------------------------------

   CREATE SEQUENCE  "HR"."TICKET_SEQ3"  MINVALUE 1 MAXVALUE 999999999999999999999999999 INCREMENT BY 1 START WITH 41 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence TRANSPOR_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "HR"."TRANSPOR_SEQ"  MINVALUE 1 MAXVALUE 999999999999999999999999999 INCREMENT BY 1 START WITH 21 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence USER_ACCESS_MENU_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "HR"."USER_ACCESS_MENU_SEQ"  MINVALUE 1 MAXVALUE 999999999999999999999999999 INCREMENT BY 1 START WITH 41 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence USER_MENU_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "HR"."USER_MENU_SEQ"  MINVALUE 1 MAXVALUE 999999999999999999999999999 INCREMENT BY 1 START WITH 21 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence USER_ROLE_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "HR"."USER_ROLE_SEQ"  MINVALUE 1 MAXVALUE 999999999999999999999999999 INCREMENT BY 1 START WITH 21 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence USER_SUB_MENU_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "HR"."USER_SUB_MENU_SEQ"  MINVALUE 1 MAXVALUE 999999999999999999999999999 INCREMENT BY 1 START WITH 61 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence USER_SYS_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "HR"."USER_SYS_SEQ"  MINVALUE 1 MAXVALUE 999999999999999999999999999 INCREMENT BY 1 START WITH 1 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Sequence USER_TOKEN_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "HR"."USER_TOKEN_SEQ"  MINVALUE 1 MAXVALUE 999999999999999999999999999 INCREMENT BY 1 START WITH 61 CACHE 20 NOORDER  NOCYCLE ;
--------------------------------------------------------
--  DDL for Table CATEGORY
--------------------------------------------------------

  CREATE TABLE "HR"."CATEGORY" 
   (	"ID_CATEGORY" NUMBER, 
	"CATEGORY" VARCHAR2(20 BYTE)
   ) PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table DIVISI
--------------------------------------------------------

  CREATE TABLE "HR"."DIVISI" 
   (	"ID_DIVISI" NUMBER, 
	"DIVISI" VARCHAR2(20 BYTE)
   ) PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table STATUS
--------------------------------------------------------

  CREATE TABLE "HR"."STATUS" 
   (	"ID_STATUS" NUMBER, 
	"STATUS" VARCHAR2(20 BYTE)
   ) PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table STATUS_TICKET
--------------------------------------------------------

  CREATE TABLE "HR"."STATUS_TICKET" 
   (	"ID_TICKET" NUMBER, 
	"USER_COMPLAIN" VARCHAR2(50 BYTE), 
	"CONTACT" VARCHAR2(20 BYTE), 
	"ID_DIVISI" VARCHAR2(20 BYTE), 
	"PLACE" VARCHAR2(20 BYTE), 
	"ID_ADMIN" NUMBER(2,0), 
	"ID_TECHNICIAN" NUMBER(2,0), 
	"ID_CATEGORY" NUMBER(2,0), 
	"ID_SUB_CATEGORY" NUMBER(2,0), 
	"DETAIL" VARCHAR2(50 BYTE), 
	"ID_STATUS" NUMBER(2,0), 
	"HOW_TO_SOLVE" VARCHAR2(50 BYTE), 
	"DATE_INSERT" TIMESTAMP (6), 
	"DATE_SOLVE" TIMESTAMP (6), 
	"NOTE" VARCHAR2(50 BYTE), 
	"UPDATE_TIME" TIMESTAMP (6)
   ) PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table TECHNICIAN
--------------------------------------------------------

  CREATE TABLE "HR"."TECHNICIAN" 
   (	"ID_TEKNISI" NUMBER, 
	"TECHNICIAN_NAME" VARCHAR2(20 BYTE), 
	"COLUMN1" NUMBER, 
	"EMAIL" VARCHAR2(20 BYTE)
   ) PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table TICKET
--------------------------------------------------------

  CREATE TABLE "HR"."TICKET" 
   (	"ID_TICKET" NUMBER, 
	"USER_COMPLAIN" VARCHAR2(50 BYTE), 
	"CONTACT" VARCHAR2(20 BYTE), 
	"ID_DIVISI" VARCHAR2(20 BYTE), 
	"PLACE" VARCHAR2(20 BYTE), 
	"ID_ADMIN" NUMBER(2,0), 
	"ID_TECHNICIAN" NUMBER(2,0), 
	"ID_CATEGORY" NUMBER(2,0), 
	"ID_SUB_CATEGORY" NUMBER(2,0), 
	"DETAIL" VARCHAR2(50 BYTE), 
	"ID_STATUS" NUMBER(2,0), 
	"HOW_TO_SOLVE" VARCHAR2(50 BYTE), 
	"DATE_INSERT" TIMESTAMP (6), 
	"DATE_SOLVE" TIMESTAMP (6), 
	"NOTE" VARCHAR2(50 BYTE), 
	"UPDATE_TIME" TIMESTAMP (6)
   ) PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table USER_ACCESS_MENU
--------------------------------------------------------

  CREATE TABLE "HR"."USER_ACCESS_MENU" 
   (	"ACCESS_ID" NUMBER, 
	"ROLE_ID" NUMBER, 
	"MENU_ID" NUMBER
   ) PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table USER_MENU
--------------------------------------------------------

  CREATE TABLE "HR"."USER_MENU" 
   (	"MENU_ID" NUMBER, 
	"MENU" VARCHAR2(20 BYTE)
   ) PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table USER_ROLE
--------------------------------------------------------

  CREATE TABLE "HR"."USER_ROLE" 
   (	"ROLE_ID" NUMBER, 
	"ROLE" VARCHAR2(20 BYTE)
   ) PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table USER_SUB_MENU
--------------------------------------------------------

  CREATE TABLE "HR"."USER_SUB_MENU" 
   (	"SUB_ID" NUMBER, 
	"TITLE" NVARCHAR2(20), 
	"URL" VARCHAR2(20 BYTE), 
	"ICON" VARCHAR2(50 BYTE), 
	"IS_ACTIVE" NUMBER, 
	"MENU_ID" NUMBER
   ) PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table USER_SYS
--------------------------------------------------------

  CREATE TABLE "HR"."USER_SYS" 
   (	"ID_USER" NUMBER, 
	"EMAIL" VARCHAR2(225 BYTE), 
	"NAME" VARCHAR2(255 BYTE), 
	"IMAGE" VARCHAR2(255 BYTE), 
	"ROLE_ID" NUMBER DEFAULT 2, 
	"PASSWORD" VARCHAR2(225 BYTE), 
	"IS_ACTIVE" NUMBER, 
	"DATE_CREATED" DATE, 
	"QRCODE" VARCHAR2(50 BYTE)
   ) PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table USER_TOKEN
--------------------------------------------------------

  CREATE TABLE "HR"."USER_TOKEN" 
   (	"TOKEN_ID" NUMBER, 
	"EMAIL" VARCHAR2(225 BYTE), 
	"TOKEN" VARCHAR2(225 BYTE), 
	"DATE_CREATED" DATE
   ) PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for View EMP_DETAILS_VIEW
--------------------------------------------------------

  CREATE OR REPLACE FORCE VIEW "HR"."EMP_DETAILS_VIEW" ("EMPLOYEE_ID", "JOB_ID", "MANAGER_ID", "DEPARTMENT_ID", "LOCATION_ID", "COUNTRY_ID", "FIRST_NAME", "LAST_NAME", "SALARY", "COMMISSION_PCT", "DEPARTMENT_NAME", "JOB_TITLE", "CITY", "STATE_PROVINCE", "COUNTRY_NAME", "REGION_NAME") AS 
  SELECT
  e.employee_id,
  e.job_id,
  e.manager_id,
  e.department_id,
  d.location_id,
  l.country_id,
  e.first_name,
  e.last_name,
  e.salary,
  e.commission_pct,
  d.department_name,
  j.job_title,
  l.city,
  l.state_province,
  c.country_name,
  r.region_name
FROM
  employees e,
  departments d,
  jobs j,
  locations l,
  countries c,
  regions r
WHERE e.department_id = d.department_id
  AND d.location_id = l.location_id
  AND l.country_id = c.country_id
  AND c.region_id = r.region_id
  AND j.job_id = e.job_id
WITH READ ONLY
;
REM INSERTING into HR.CATEGORY
SET DEFINE OFF;
REM INSERTING into HR.DIVISI
SET DEFINE OFF;
REM INSERTING into HR.STATUS
SET DEFINE OFF;
REM INSERTING into HR.STATUS_TICKET
SET DEFINE OFF;
REM INSERTING into HR.TECHNICIAN
SET DEFINE OFF;
REM INSERTING into HR.TICKET
SET DEFINE OFF;
REM INSERTING into HR.USER_ACCESS_MENU
SET DEFINE OFF;
Insert into HR.USER_ACCESS_MENU (ACCESS_ID,ROLE_ID,MENU_ID) values (1,1,1);
Insert into HR.USER_ACCESS_MENU (ACCESS_ID,ROLE_ID,MENU_ID) values (2,1,2);
Insert into HR.USER_ACCESS_MENU (ACCESS_ID,ROLE_ID,MENU_ID) values (3,2,2);
Insert into HR.USER_ACCESS_MENU (ACCESS_ID,ROLE_ID,MENU_ID) values (4,1,3);
REM INSERTING into HR.USER_MENU
SET DEFINE OFF;
Insert into HR.USER_MENU (MENU_ID,MENU) values (1,'admin');
Insert into HR.USER_MENU (MENU_ID,MENU) values (2,'user');
Insert into HR.USER_MENU (MENU_ID,MENU) values (3,'menu');
REM INSERTING into HR.USER_ROLE
SET DEFINE OFF;
Insert into HR.USER_ROLE (ROLE_ID,ROLE) values (1,'Administrator');
Insert into HR.USER_ROLE (ROLE_ID,ROLE) values (2,'Member');
REM INSERTING into HR.USER_SUB_MENU
SET DEFINE OFF;
Insert into HR.USER_SUB_MENU (SUB_ID,TITLE,URL,ICON,IS_ACTIVE,MENU_ID) values (1,'Menu Management','menu','fas fa-fw fa-folder',1,3);
Insert into HR.USER_SUB_MENU (SUB_ID,TITLE,URL,ICON,IS_ACTIVE,MENU_ID) values (2,'Sub Menu','menu/submenu','fas fa-fw fa-folder',1,3);
Insert into HR.USER_SUB_MENU (SUB_ID,TITLE,URL,ICON,IS_ACTIVE,MENU_ID) values (3,'dashboard','admin','fas fa-fw fa-tachometer-alt',1,1);
Insert into HR.USER_SUB_MENU (SUB_ID,TITLE,URL,ICON,IS_ACTIVE,MENU_ID) values (4,'My_Profile','user','fas fa-fw fa-user',1,2);
Insert into HR.USER_SUB_MENU (SUB_ID,TITLE,URL,ICON,IS_ACTIVE,MENU_ID) values (23,'Edit Profile','user/edit','fas fa-fw fa-user',1,2);
Insert into HR.USER_SUB_MENU (SUB_ID,TITLE,URL,ICON,IS_ACTIVE,MENU_ID) values (24,'Change Password','user/changepassword','fas fa-fw fa-user',1,2);
Insert into HR.USER_SUB_MENU (SUB_ID,TITLE,URL,ICON,IS_ACTIVE,MENU_ID) values (41,'Role','admin/role','fas fa-fw fa-user',1,1);
REM INSERTING into HR.USER_SYS
SET DEFINE OFF;
Insert into HR.USER_SYS (ID_USER,EMAIL,NAME,IMAGE,ROLE_ID,PASSWORD,IS_ACTIVE,DATE_CREATED,QRCODE) values (30,'user@gmail.com','userR','avatar.png',1,'$2y$10$cAttfv8HvlQ.gAp6SxRuXOd8tbAlfROzzCCWoFx52ySx9aNKzjRJ6',1,to_date('12-FEB-12','DD-MON-RR'),null);
Insert into HR.USER_SYS (ID_USER,EMAIL,NAME,IMAGE,ROLE_ID,PASSWORD,IS_ACTIVE,DATE_CREATED,QRCODE) values (46,'user22@gmail.com','user','default.jpg',2,'$2y$10$8xumyepPYcQF5fDWXYX9wOXYlG/9d9WS1jsTCT7PwU56egZCK660G',0,to_date('17-FEB-21','DD-MON-RR'),null);
Insert into HR.USER_SYS (ID_USER,EMAIL,NAME,IMAGE,ROLE_ID,PASSWORD,IS_ACTIVE,DATE_CREATED,QRCODE) values (29,'maratul.18016@mhs.unesa.ac.id','maratul','default.jpg',2,'$2y$10$ibTstftduhNAbu08tGHCVOUeaAPij8rPdtGppRUhXRVaI1igyNEJq',1,to_date('12-FEB-12','DD-MON-RR'),null);
Insert into HR.USER_SYS (ID_USER,EMAIL,NAME,IMAGE,ROLE_ID,PASSWORD,IS_ACTIVE,DATE_CREATED,QRCODE) values (45,'maratulbariroh3630@gmail.com','user','default.jpg',2,'$2y$10$Odsj.h./Y583YKMoCY/oVenk4eoQ0dkWVi3mGCHWr4U/.dYrpZ2fC',1,to_date('16-FEB-21','DD-MON-RR'),null);
REM INSERTING into HR.USER_TOKEN
SET DEFINE OFF;
Insert into HR.USER_TOKEN (TOKEN_ID,EMAIL,TOKEN,DATE_CREATED) values (46,'user22@gmail.com','ncifg1q+RdxrnokKuH528rwcH5b7VJcpAgkHR9aO7qeO',to_date('17-FEB-21','DD-MON-RR'));
--------------------------------------------------------
--  DDL for Index TEKNISI_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "HR"."TEKNISI_PK" ON "HR"."TECHNICIAN" ("ID_TEKNISI") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index STATUS_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "HR"."STATUS_PK" ON "HR"."STATUS" ("ID_STATUS") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index CATEGORY_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "HR"."CATEGORY_PK" ON "HR"."CATEGORY" ("ID_CATEGORY") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index DIVISI_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "HR"."DIVISI_PK" ON "HR"."DIVISI" ("ID_DIVISI") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index TICKET_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "HR"."TICKET_PK" ON "HR"."TICKET" ("ID_TICKET") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index USER_SUB_MENU_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "HR"."USER_SUB_MENU_PK" ON "HR"."USER_SUB_MENU" ("SUB_ID") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index USER_ACCESS_MENU_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "HR"."USER_ACCESS_MENU_PK" ON "HR"."USER_ACCESS_MENU" ("ACCESS_ID") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index CILOGINAPP_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "HR"."CILOGINAPP_PK" ON "HR"."USER_SYS" ("ID_USER") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index USER_TOKEN_INDEX1
--------------------------------------------------------

  CREATE INDEX "HR"."USER_TOKEN_INDEX1" ON "HR"."USER_TOKEN" ("TOKEN_ID") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index USER_MENU_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "HR"."USER_MENU_PK" ON "HR"."USER_MENU" ("MENU_ID") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Trigger BI_CILOGINAPP
--------------------------------------------------------

  CREATE OR REPLACE TRIGGER "HR"."BI_CILOGINAPP" 
  before insert on "USER_SYS"               
  for each row  
begin   
    select "CILOGINAPP_SEQ".nextval into :NEW.ID_USER from dual; 
end; 

/
ALTER TRIGGER "HR"."BI_CILOGINAPP" ENABLE;
--------------------------------------------------------
--  DDL for Trigger CATEGORY_TRG
--------------------------------------------------------

  CREATE OR REPLACE TRIGGER "HR"."CATEGORY_TRG" 
BEFORE INSERT ON CATEGORY 
FOR EACH ROW 
BEGIN
  <<COLUMN_SEQUENCES>>
  BEGIN
    NULL;
  END COLUMN_SEQUENCES;
END;
/
ALTER TRIGGER "HR"."CATEGORY_TRG" ENABLE;
--------------------------------------------------------
--  DDL for Trigger DIVISI_TRG
--------------------------------------------------------

  CREATE OR REPLACE TRIGGER "HR"."DIVISI_TRG" 
BEFORE INSERT ON DIVISI 
FOR EACH ROW 
BEGIN
  <<COLUMN_SEQUENCES>>
  BEGIN
    IF INSERTING AND :NEW.ID_DIVISI IS NULL THEN
      SELECT DIVISI_SEQ.NEXTVAL INTO :NEW.ID_DIVISI FROM SYS.DUAL;
    END IF;
  END COLUMN_SEQUENCES;
END;
/
ALTER TRIGGER "HR"."DIVISI_TRG" ENABLE;
--------------------------------------------------------
--  DDL for Trigger STATUS_TRG
--------------------------------------------------------

  CREATE OR REPLACE TRIGGER "HR"."STATUS_TRG" 
BEFORE INSERT ON STATUS 
FOR EACH ROW 
BEGIN
  <<COLUMN_SEQUENCES>>
  BEGIN
    IF INSERTING AND :NEW.ID_STATUS IS NULL THEN
      SELECT STATUS_SEQ1.NEXTVAL INTO :NEW.ID_STATUS FROM SYS.DUAL;
    END IF;
  END COLUMN_SEQUENCES;
END;
/
ALTER TRIGGER "HR"."STATUS_TRG" ENABLE;
--------------------------------------------------------
--  DDL for Trigger TEKNISI_TRG
--------------------------------------------------------

  CREATE OR REPLACE TRIGGER "HR"."TEKNISI_TRG" 
BEFORE INSERT ON TECHNICIAN 
FOR EACH ROW 
BEGIN
  <<COLUMN_SEQUENCES>>
  BEGIN
    IF INSERTING AND :NEW.ID_TEKNISI IS NULL THEN
      SELECT TEKNISI_SEQ.NEXTVAL INTO :NEW.ID_TEKNISI FROM SYS.DUAL;
    END IF;
  END COLUMN_SEQUENCES;
END;
/
ALTER TRIGGER "HR"."TEKNISI_TRG" ENABLE;
--------------------------------------------------------
--  DDL for Trigger TICKET_TRG
--------------------------------------------------------

  CREATE OR REPLACE TRIGGER "HR"."TICKET_TRG" 
BEFORE INSERT ON TICKET 
FOR EACH ROW 
BEGIN
  <<COLUMN_SEQUENCES>>
  BEGIN
    NULL;
  END COLUMN_SEQUENCES;
END;
/
ALTER TRIGGER "HR"."TICKET_TRG" ENABLE;
--------------------------------------------------------
--  DDL for Trigger USER_ACCESS_MENU_TRG
--------------------------------------------------------

  CREATE OR REPLACE TRIGGER "HR"."USER_ACCESS_MENU_TRG" 
BEFORE INSERT ON USER_ACCESS_MENU 
FOR EACH ROW 
BEGIN
  <<COLUMN_SEQUENCES>>
  BEGIN
    IF INSERTING AND :NEW.ACCESS_ID IS NULL THEN
      SELECT USER_ACCESS_MENU_SEQ.NEXTVAL INTO :NEW.ACCESS_ID FROM SYS.DUAL;
    END IF;
  END COLUMN_SEQUENCES;
END;
/
ALTER TRIGGER "HR"."USER_ACCESS_MENU_TRG" ENABLE;
--------------------------------------------------------
--  DDL for Trigger USER_MENU_TRG
--------------------------------------------------------

  CREATE OR REPLACE TRIGGER "HR"."USER_MENU_TRG" 
BEFORE INSERT ON USER_MENU 
FOR EACH ROW 
BEGIN
  <<COLUMN_SEQUENCES>>
  BEGIN
    IF INSERTING AND :NEW.MENU_ID IS NULL THEN
      SELECT USER_MENU_SEQ.NEXTVAL INTO :NEW.MENU_ID FROM SYS.DUAL;
    END IF;
  END COLUMN_SEQUENCES;
END;
/
ALTER TRIGGER "HR"."USER_MENU_TRG" ENABLE;
--------------------------------------------------------
--  DDL for Trigger USER_ROLE_TRG
--------------------------------------------------------

  CREATE OR REPLACE TRIGGER "HR"."USER_ROLE_TRG" 
BEFORE INSERT ON USER_ROLE 
FOR EACH ROW 
BEGIN
  <<COLUMN_SEQUENCES>>
  BEGIN
    IF INSERTING AND :NEW.ROLE_ID IS NULL THEN
      SELECT USER_ROLE_SEQ.NEXTVAL INTO :NEW.ROLE_ID FROM SYS.DUAL;
    END IF;
  END COLUMN_SEQUENCES;
END;
/
ALTER TRIGGER "HR"."USER_ROLE_TRG" ENABLE;
--------------------------------------------------------
--  DDL for Trigger USER_SUB_MENU_TRG
--------------------------------------------------------

  CREATE OR REPLACE TRIGGER "HR"."USER_SUB_MENU_TRG" 
BEFORE INSERT ON USER_SUB_MENU 
FOR EACH ROW 
BEGIN
  <<COLUMN_SEQUENCES>>
  BEGIN
    NULL;
  END COLUMN_SEQUENCES;
END;
/
ALTER TRIGGER "HR"."USER_SUB_MENU_TRG" ENABLE;
--------------------------------------------------------
--  DDL for Trigger USER_SUB_MENU_TRG1
--------------------------------------------------------

  CREATE OR REPLACE TRIGGER "HR"."USER_SUB_MENU_TRG1" 
BEFORE INSERT ON USER_SUB_MENU 
FOR EACH ROW 
BEGIN
  <<COLUMN_SEQUENCES>>
  BEGIN
    IF INSERTING AND :NEW.SUB_ID IS NULL THEN
      SELECT USER_SUB_MENU_SEQ.NEXTVAL INTO :NEW.SUB_ID FROM SYS.DUAL;
    END IF;
  END COLUMN_SEQUENCES;
END;
/
ALTER TRIGGER "HR"."USER_SUB_MENU_TRG1" ENABLE;
--------------------------------------------------------
--  DDL for Trigger USER_SYS_TRG
--------------------------------------------------------

  CREATE OR REPLACE TRIGGER "HR"."USER_SYS_TRG" 
BEFORE INSERT ON USER_SYS 
FOR EACH ROW 
BEGIN
  <<COLUMN_SEQUENCES>>
  BEGIN
    NULL;
  END COLUMN_SEQUENCES;
END;
/
ALTER TRIGGER "HR"."USER_SYS_TRG" ENABLE;
--------------------------------------------------------
--  DDL for Trigger USER_TOKEN_TRG
--------------------------------------------------------

  CREATE OR REPLACE TRIGGER "HR"."USER_TOKEN_TRG" 
BEFORE INSERT ON USER_TOKEN 
FOR EACH ROW 
BEGIN
  <<COLUMN_SEQUENCES>>
  BEGIN
    IF INSERTING AND :NEW.TOKEN_ID IS NULL THEN
      SELECT USER_TOKEN_SEQ.NEXTVAL INTO :NEW.TOKEN_ID FROM SYS.DUAL;
    END IF;
  END COLUMN_SEQUENCES;
END;
/
ALTER TRIGGER "HR"."USER_TOKEN_TRG" ENABLE;
--------------------------------------------------------
--  DDL for Procedure ADD_JOB_HISTORY
--------------------------------------------------------
set define off;

  CREATE OR REPLACE PROCEDURE "HR"."ADD_JOB_HISTORY" 
  (  p_emp_id          job_history.employee_id%type
   , p_start_date      job_history.start_date%type
   , p_end_date        job_history.end_date%type
   , p_job_id          job_history.job_id%type
   , p_department_id   job_history.department_id%type
   )
IS
BEGIN
  INSERT INTO job_history (employee_id, start_date, end_date,
                           job_id, department_id)
    VALUES(p_emp_id, p_start_date, p_end_date, p_job_id, p_department_id);
END add_job_history;

/
--------------------------------------------------------
--  DDL for Procedure SECURE_DML
--------------------------------------------------------
set define off;

  CREATE OR REPLACE PROCEDURE "HR"."SECURE_DML" 
IS
BEGIN
  IF TO_CHAR (SYSDATE, 'HH24:MI') NOT BETWEEN '08:00' AND '18:00'
        OR TO_CHAR (SYSDATE, 'DY') IN ('SAT', 'SUN') THEN
	RAISE_APPLICATION_ERROR (-20205,
		'You may only make changes during normal office hours');
  END IF;
END secure_dml;

/
--------------------------------------------------------
--  Constraints for Table TECHNICIAN
--------------------------------------------------------

  ALTER TABLE "HR"."TECHNICIAN" MODIFY ("ID_TEKNISI" NOT NULL ENABLE);
 
  ALTER TABLE "HR"."TECHNICIAN" ADD CONSTRAINT "TEKNISI_PK" PRIMARY KEY ("ID_TEKNISI")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT)
  TABLESPACE "USERS"  ENABLE;
--------------------------------------------------------
--  Constraints for Table USER_SYS
--------------------------------------------------------

  ALTER TABLE "HR"."USER_SYS" ADD CONSTRAINT "CILOGINAPP_PK" PRIMARY KEY ("ID_USER")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT)
  TABLESPACE "USERS"  ENABLE;
--------------------------------------------------------
--  Constraints for Table USER_MENU
--------------------------------------------------------

  ALTER TABLE "HR"."USER_MENU" MODIFY ("MENU_ID" NOT NULL ENABLE);
 
  ALTER TABLE "HR"."USER_MENU" ADD CONSTRAINT "USER_MENU_PK" PRIMARY KEY ("MENU_ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT)
  TABLESPACE "USERS"  ENABLE;
--------------------------------------------------------
--  Constraints for Table TICKET
--------------------------------------------------------

  ALTER TABLE "HR"."TICKET" MODIFY ("ID_TICKET" NOT NULL ENABLE);
 
  ALTER TABLE "HR"."TICKET" ADD CONSTRAINT "TICKET_PK" PRIMARY KEY ("ID_TICKET")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT)
  TABLESPACE "USERS"  ENABLE;
--------------------------------------------------------
--  Constraints for Table USER_SUB_MENU
--------------------------------------------------------

  ALTER TABLE "HR"."USER_SUB_MENU" MODIFY ("SUB_ID" NOT NULL ENABLE);
 
  ALTER TABLE "HR"."USER_SUB_MENU" ADD CONSTRAINT "USER_SUB_MENU_PK" PRIMARY KEY ("SUB_ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT)
  TABLESPACE "USERS"  ENABLE;
--------------------------------------------------------
--  Constraints for Table USER_ACCESS_MENU
--------------------------------------------------------

  ALTER TABLE "HR"."USER_ACCESS_MENU" MODIFY ("ACCESS_ID" NOT NULL ENABLE);
 
  ALTER TABLE "HR"."USER_ACCESS_MENU" ADD CONSTRAINT "USER_ACCESS_MENU_PK" PRIMARY KEY ("ACCESS_ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT)
  TABLESPACE "USERS"  ENABLE;
--------------------------------------------------------
--  Constraints for Table STATUS
--------------------------------------------------------

  ALTER TABLE "HR"."STATUS" ADD CONSTRAINT "STATUS_PK" PRIMARY KEY ("ID_STATUS")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT)
  TABLESPACE "USERS"  ENABLE;
 
  ALTER TABLE "HR"."STATUS" MODIFY ("ID_STATUS" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table USER_TOKEN
--------------------------------------------------------

  ALTER TABLE "HR"."USER_TOKEN" MODIFY ("TOKEN_ID" NOT NULL ENABLE);
 
  ALTER TABLE "HR"."USER_TOKEN" ADD CONSTRAINT "USER_TOKEN_PK" PRIMARY KEY ("TOKEN_ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT)
  TABLESPACE "USERS"  ENABLE;
--------------------------------------------------------
--  Constraints for Table CATEGORY
--------------------------------------------------------

  ALTER TABLE "HR"."CATEGORY" ADD CONSTRAINT "CATEGORY_PK" PRIMARY KEY ("ID_CATEGORY")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT)
  TABLESPACE "USERS"  ENABLE;
 
  ALTER TABLE "HR"."CATEGORY" MODIFY ("ID_CATEGORY" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table STATUS_TICKET
--------------------------------------------------------

  ALTER TABLE "HR"."STATUS_TICKET" MODIFY ("ID_TICKET" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table DIVISI
--------------------------------------------------------

  ALTER TABLE "HR"."DIVISI" ADD CONSTRAINT "DIVISI_PK" PRIMARY KEY ("ID_DIVISI")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT)
  TABLESPACE "USERS"  ENABLE;
 
  ALTER TABLE "HR"."DIVISI" MODIFY ("ID_DIVISI" NOT NULL ENABLE);
