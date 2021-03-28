## Travel Japan By Kieffer Navarro

## Why my UI and UX implementation and code implementation is the best?

-----Code implementation
Because I used PHP framework called Laravel. Since it is a framework, it practices the MVC Architecture.

-----UI and UX implementation
Because the website is responsive and easy to use. It also has lesser clicks for the users.


## Answers to Part 2 of Exam - SQL -- Kieffer Navarro

------------ Number 1
1. Write a query to display the ff columns ID (should start
with T + 11 digits of trn_teacher.id with leading zeros like
'T00000088424'), Nickname, Status and Roles (like
Trainer/Assessor/Staff) using table trn_teacher and
trn_teacher_role.

SELECT 
	CONCAT('T00000', trn_teacher.id) AS ID, 
	trn_teacher.nickname AS Nickname, 
	(CASE trn_teacher.status 
		WHEN 0 THEN 'Discontinued' 
		WHEN 1 THEN 'Active' 
		WHEN 2 THEN 'Deactivated' 
		ELSE 'No Data' END) AS Status, 
	GROUP_CONCAT((CASE trn_teacher_role.role 
		WHEN 1 THEN 'Trainer' 
		WHEN 2 THEN 'Assessor' 
		WHEN 3 THEN 'Staff' 
		ELSE 'No Data' END) SEPARATOR ' | ') AS Roles 
FROM `trn_teacher` 
	INNER JOIN `trn_teacher_role` ON trn_teacher_role.teacher_id = trn_teacher.id
GROUP BY trn_teacher.id, trn_teacher.nickname

------------ Number 2
2. Write a query to display the ff columns ID (from teacher.id),
Nickname, Open (total open slots from trn_teacher_time_table),
Reserved (total reserved slots from trn_teacher_time_table),
Taught (total taught from trn_evaluation) and NoShow (total
no_show from trn_evaluation) using all tables above. Should
show only those who are active (trn_teacher.status = 1 or 2)
and those who have both Trainer and Assessor role.

SELECT 
	trn_teacher.id AS ID, 
	trn_teacher.nickname AS Nickname, 
	SUM(CASE trn_time_table.status WHEN 1 THEN 1 ELSE 0 END) AS Open,
	SUM(CASE trn_time_table.status WHEN 3 THEN 1 ELSE 0 END) AS Reserved,
	SUM(CASE trn_evaluation.result WHEN 1 THEN 1 ELSE 0 END) AS Taught,
	SUM(CASE trn_evaluation.result WHEN 2 THEN 1 ELSE 0 END) AS No_Show
FROM `trn_teacher` 
	INNER JOIN `trn_time_table` ON trn_time_table.teacher_id = trn_teacher.id
	INNER JOIN `trn_evaluation` ON trn_evaluation.teacher_id = trn_teacher.id
WHERE trn_teacher.status = 1 OR trn_teacher.status
GROUP BY trn_teacher.id, trn_teacher.nickname