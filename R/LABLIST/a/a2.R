#. Write R program to find roots of quadratic equation using user 
#defined function. Test the program user supplied values for all 
#possible cases. 
quadratic <- function(a,b,c) {
	D <- (b * b) - 4 * a * c
	if (a == 0) {
		if (b == 0) {
			return(c)	
		} else {
			return(-c/b)	
		}		
	} else {	
		roots <- (-b + c(1, -1) * sqrt(as.complex(D))) / (2*a)
		if (all(Im(roots) == 0)) {
			root <- Re(roots)
		} else
			return(roots)
	}
}

a <- as.numeric(readline("Enter a : "))
b <- as.numeric(readline("Enter b : "))
c <- as.numeric(readline("Enter c : "))
print(quadratic(a,b,c))
