n = 1
m = 0

while n <= 100:
  if n% 3== 0 and n% 8==0:
    print("공배수:", n)
    if m  ==0: m=n
  n += 1
print("최소 공배수:", m)