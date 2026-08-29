n = readline("Enter a number: ")
fact =  1
for (i in 2:n)
fact = fact * i
print(fact %% 10)