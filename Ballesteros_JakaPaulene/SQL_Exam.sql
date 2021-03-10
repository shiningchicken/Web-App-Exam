
--A. Get all data of highest paid employee (without using LIMIT).
SELECT * FROM Employees employee 
	 JOIN Departments department ON department.id = employee.department_id 
	 JOIN Salary pay ON employee.salary_id = pay.id 
	 WHERE employee.salary_id = (SELECT id from salary where salary =(SELECT MAX(salary) FROM salary))
	 
--B. Get all employees that are hired from 2017-2018.

SELECT * FROM Employees employee
	 JOIN Departments department ON department.id = employee.department_id
	 JOIN Salary pay ON employee.salary_id = pay.id
	 WHERE DATEPART(year,employee.date_hired) BETWEEN '2017' AND '2018'
	 
--C. Get all employees that belongs to IT department AND hired 2018 onwards.

SELECT * FROM Employees employee 
	 JOIN Departments department ON department.id = employee.department_id
	 JOIN Salary pay ON employee.salary_id = pay.id
	 WHERE department = 'IT' AND( DATEPART(year,employee.date_hired) >= '2018')