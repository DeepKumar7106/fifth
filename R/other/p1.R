check <- function(num) { if (num%%2 == 0) { print("Even") } else { print("Odd") }}

n = as.numeric(readline("Enter: "))
check(n)




check(n * n)
check(n - 1)
check(n + n)
check(n * n * n)

add <- function() {
	a <- 10
	b <- 10
	print(a+b)
}

add()