employee_name = "Tanish"
employee_id = 24770
salary = 10000
departments = c("IT","Finance")
experienced = FALSE

employee = list(employee_name, employee_id, salary, departments, experienced)

#access the employee name
employee[1]
#give names to all list elements
names(employee) = c("name", "id", "salary", "departments", "experienced")
print(employee)

#add designation at position three
employee = append(employee, "clerk", after = 2)
print(employee)

#remove the salary element
employee["salary"] = NULL

#print the first and third elements
print(employee[1])
print(employee[2])

#Update the department elements
employee["departments"] = c("Accounts")