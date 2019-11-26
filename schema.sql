-- Create a new database called 'MentorshipProgram'
-- Connect to the 'master' database to run this snippet
USE master
GO
-- Create the new database if it does not exist already
IF NOT EXISTS (
    SELECT name
        FROM sys.databases
        WHERE name = N'MentorshipProgram'
)
CREATE DATABASE MentorshipProgram
GO

-- Create a new table called 'Mentee' in schema 'SchemaName'
-- Drop the table if it already exists
IF OBJECT_ID('SchemaName.Mentee', 'U') IS NOT NULL
DROP TABLE SchemaName.Mentor
GO
-- Create the table in the specified schema
CREATE TABLE SchemaName.Mentee
(
    Id INT NOT NULL PRIMARY KEY, -- primary key column
    Title [NVARCHAR](50) NOT NULL,
    UserName [NVARCHAR](50) NOT NULL,
    Age INT NOT NULL,
    Birthday DATE NOT NULL,
    Number INT NOT NULL,
    Major [NVARCHAR](50) NOT NULL,
    Faculty [NVARCHAR](50) NOT NULL,
    SAddress [NVARCHAR](50) NOT NULL,
    CInterest [NVARCHAR](50) NOT NULL,
    Plans [NVARCHAR](200) NOT NULL,
    Programme [NVARCHAR](50) NOT NULL,
    -- specify more columns here
);
GO