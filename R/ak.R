quadratic <- function(a,b,c) {
	D <- (b * b) - 4 * a * c
	if (a == 0) {
		if (b == 0) {
			if (c == 0) {
				return("Infinite number of solutions")
			} else {
				return("No solutions")
			}	
		} else {
			return(-c/b)	
		}		
	}	

	roots <- (-b + c(1, -1) * sqrt(as.complex(D))) / (2*a)
	if (all(Im(roots) == 0)) {
		root <- Re(roots)
	} else
		return(roots)
}

a <- 1
b <- 2
c <- 0
print(quadratic(a,b,c))