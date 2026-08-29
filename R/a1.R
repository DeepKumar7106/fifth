#Write a program to create a 3 X 3 matrices A and B and perform the 
#following operations. 
#a. AT.B  
#b. BT.(A.AT) 
#c. (A.AT).BT 
#d.  [(B.BT)+(A.AT)-100I3]-1

A <- matrix(c(1:9), nrow=3, ncol=3)
B <- matrix(c(9:1), nrow=3, ncol=3)


print("Matrix A")
print(A)
print("Matrix B")
print(B)

a <- t(A)%*%B
b <- t(B)%*%A%*%t(A)
c <- A%*%t(A)%*%t(B)
d <- solve((B%*%t(B))+(A%*%t(A))- 100 * diag(x=3))
print(a)
print(b)
print(c)
print(d)
