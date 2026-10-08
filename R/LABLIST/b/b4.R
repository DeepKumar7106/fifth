# The times taken by a large group of students to complete a piece of homework, T minutes, are Normally 
# distributed with a mean of 57 minutes and standard deviation of 6.5. Find the probability that the time 
# taken by a random student from the group to complete this homework will be less than 60 minutes. Write 
# R script to Find the probability that the time taken by a random student from the group to complete 
# this homework 

# a) Will be less than 60 minutes 
print("Pobability that the time taken by a random student from the group to complete this homework will be less than 60 minutes")
print(pnorm(60, mean = 57, sd = 6.5))

# b) Between 50 and 80 minutes 
print("Pobability that the time taken by a random student from the group to complete this homework btween 50 and 80 minutes")
print(pnorm(80,mean = 57, sd = 6.5) - pnorm(50,mean = 57, sd = 6.5))