#user defined function

details = function(name, roll, m1, m2, m3) {
	total = m1 + m2 + m3
	per = total / 3
	cat("Student Details\n Name: ", name, "\nRoll No: ", roll , "\nMarks 1: ", m1, "\nMarks 2: ", m2, "\nMarks 3: ", m3 , "\nTotal: ", total, "\nPercentage: ", per)
}

print("Enter the details of student: ")
name = readline("Name: ")
roll = readline("Roll: ")
m1 = as.numeric(readline("Marks 1: "))
m2 = as.numeric(readline("Marks 2: "))
m3 = as.numeric(readline("Marks 3: "))

details(name, roll, m1, m2, m3)