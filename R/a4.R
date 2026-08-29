# Write an R program to create a list containing strings, 
#numbers, vectors and logical values and do the following 
#manipulations over the list 

string_list <- list("apple","banana","custard","dragon fruit","eve", 12, 24, 5, T, F, c(1:10))

#a) Access the first element in the list 
print(string_list[1])

#b) Give the names to the elements in the list
names(string_list) <- c("god fruit", "long fruit", "tasty fruit", "strange fruit", "pokemon", "number", "doubled number", "five", "the", "fruits", "list")
print(string_list)

#c) Add an element at some position in the list
string_list <- append(string_list, c(vehicle = "car"), after = 2)
print(string_list)

#d) Remove the element
string_list <- string_list[-5]
print(string_list) 

#e) Print the first and third element 
print(string_list[c(1,3)])

#f)  Update the third element 
string_list[3] <- "Orange"
print(string_list[3])

