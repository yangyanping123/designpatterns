                        抽象工厂模式
1.【意图】
    抽象工厂模式提供一个创建一系统相关或相互依赖对象的接口，而无需指定它们具体的类
2.【抽象工厂模式中主要角色】

  抽象工厂(Abstract Factory)角色：它声明一个创建抽象产品对象的接口。通常以接口或抽象类实现，所有的具体工厂类必须实现这个接口或继承这个类。 AnimalFactory

  具体工厂(Concrete Factory)角色：实现创建产品对象的操作。客户端直接调用这个角色创建产品的实例。这个角色包含有选择合适的产品对象的逻辑。通常使用具体类实现。 BlackAnimalFactory WhiteAnimalFactory

  抽象产品(Abstract Product)角色：声明一类产品的接口。它是工厂方法模式所创建的对象的父类，或它们共同拥有的接口。Cat Dog

  具体产品(Concrete Product)角色：实现抽象产品角色所定义的接口，定义一个将被相应的具体工厂创建的产品对象。其内部包含了应用程序的业务逻辑。白猫黑猫 白狗黑狗

3.【抽象工厂模式的优缺点】

    抽象工厂模式的优点:
    1、分离了具体的类
    2、使增加或替换产品族变得容易
    3、有利于产品的一致性

    抽象工厂模式的缺点: 难以支持新种类的产品。这是因为AbstractFactory接口确定了可以被创建的产品集合。
        支持新各类的产品就需要扩展访工厂接口，从而导致 AbstractFactory类及其所有子类的改变。
    抽象工厂就是以一种倾斜的方式支持增加新的产品中，它为新产品族的增加提供了方便，而不能为新的产品等级结构的增加提供这样的方便。

4.【抽象工厂模式适用场景】

    以下情况应当使用抽象工厂模式：
    1、一个系统不应当依赖于产品类实例如何被创建、组合和表达的细节，这对于所有形态的工厂模式都是重要的。
    2、这个系统的产品有多于一个的产品族，而系统只消费其中某一族的产品。
    3、 同属于同一个产品族的产品是在一起使用的，这一约束必须在系统的设计中体现出来。
    4、系统提供一个产品类的库，所有的产品以同样的接口出现，从而使用客户端不依赖于实现
 5.【比较与工厂模式】
工厂就是一个独立公司，负责生产对象；
 * 抽象工厂就是集团，负责生产子公司（工厂）；