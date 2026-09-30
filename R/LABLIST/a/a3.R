#code to generate prime using a loops 
#prime = 1 2 3 5 7 11 13 17 23 29 31 37 41 43 47 53 59
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