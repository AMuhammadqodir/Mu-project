"""
k = int(input("k : "))
n = int(input("n : "))
for i in range(n) :
    print(k)
    """

# a = int(input("a : "))
# b = int(input("b : "))
# n = b - a + 1
# product = 1
# for i in range(a, b):
#     product *= i
#     print(f"Количество чисел: {n}")
# print(f"Произведение чисел: {product}")
# Input integers A and B
A = int(input("Enter the value of A: "))
B = int(input("Enter the value of B: "))

# Calculate the count of numbers between A and B
count = B - A + 1

# Output the numbers and their count
print(f"The numbers between {A} and {B} are:")
for num in range(B - 1, A):
    print(num, end=" ")
print(f"\nTotal count of numbers: {count}")