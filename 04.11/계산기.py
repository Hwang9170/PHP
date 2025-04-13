class Calculator:
    def __init__(self, num1, num2):
        self.num1 = num1
        self.num2 = num2

    def add(self):
        return self.num1 + self.num2

    def sub(self):
        return self.num1 - self.num2

# 객체 생성 및 사용
calc1 = Calculator(10, 5)
print("덧셈:", calc1.add())
print("뺄셈:", calc1.sub())
