#write R program to calculate the total marks of a student in 5 subjects. Calculate percentage of marks and find the avg marks and determine whether student has passed or fail
a = 80 #as.integer(readline("Enter the marks for English: "))
b = 30 #as.integer(readline("Enter the marks for Social: "))
c = 50 #as.integer(readline("Enter the marks for Hindi: "))
d = 70 #as.integer(readline("Enter the marks for Math: "))
e = 86 #as.integer(readline("Enter the marks for Science: "))
total = a + b + c + d + e
per = total / 5
if (per < 35) {
print("Fail")
} else if (per > 90) {
print("Distinction") 
} else if (per > 70) {
print("first class") 
} else if (per > 60) {
print("Second Class") 
} else {
print("Pass class")
}
cat("Total marks:",total,"and percentage:", per)
