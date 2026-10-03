print("Pobability that the time taken by a random student from the group to complete this homework will be less than 60 minutes")
print(pnorm(60, mean = 57, sd = 6.5))
print("Pobability that the time taken by a random student from the group to complete this homework btween 50 and 80 minutes")
print(pnorm(80,mean = 57, sd = 6.5) - pnorm(50,mean = 57, sd = 6.5))