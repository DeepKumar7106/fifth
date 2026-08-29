##program to check if a string is pallindrome or not
str = input("Enter a string : ")
rev = str[::-1]
if str == rev:
    print(f"{str} is a pallindrome")
else:
    print(f"{str} is not a pallindrome")
    
