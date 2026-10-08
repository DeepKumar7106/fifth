# Write R script to generate prime numbers between two numbers using loops 
start <- as.integer(readline("start: "))
end <- as.integer(readline("end: "))

if (start >= end) {
	print("start must be less than end")
} else {
	count = 1
	for (num in  start:end) {
		flag <- 0
		if (num <= 1) {
			next
		}
		i <- 2
		while( i <= sqrt(num)) {
			if (num %% i == 0) {
				flag <- 1
				break
			}
			i <- i + 1
		}

		if (flag == 0) {
			count <- count + 1
			print(num)
		}
	}
	print(count)
}