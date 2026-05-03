# Sprint 3 — Task 01: SOLID

## 📄 Description

This repository contains the exercises for **Sprint 3 — Task 01**.

In this task, the focus is on understanding and applying the **SOLID principles** through code refactoring. Starting from existing working code, each exercise has been refactored to improve structure, maintainability, and design quality according to a specific SOLID principle.

Each exercise is organized in its own folder with its corresponding classes and execution entry point.

---

## 🎯 Objectives

* Understand and apply SOLID principles
* Improve code quality through refactoring
* Practice clean architecture and maintainable design
* Analyze existing code and restructure it properly

---

## 🛠 Technologies

* PHP

---

## ⚙️ Requirements

* PHP 8.0 or higher

---

## 🚀 Installation

Clone the repository:

```
git clone https://github.com/M3lgone/task-s1-03.git
```

---

## ▶️ How to Run

Each exercise has its own entry point inside the `public/` folder.

Run any exercise using:

```
php public/index.php
```

📌 Navigate to the desired exercise folder before running the command.

Example:

```
cd level-1/exercise-1
php public/index.php
```

---

## 📁 Project Structure

```
task-s1-03/
├── level-1/
│   ├── exercise-1/
│   │   ├── public/
│   │   │   └── index.php
│   │   └── src/
│   │       ├── Athlete.php
│   │       ├── Event.php
│   │       ├── Medal.php
│   │       ├── OlympicGames.php
│   │       └── Result.php
│   │
│   └── exercise-2/
│       ├── public/
│       │   └── index.php
│       └── src/
│           ├── BankTransfer.php
│           ├── PaymentMethod.php
│           ├── PaymentProcessor.php
│           ├── PaypalPaymentGateway.php
│           └── StripePaymentGateway.php
│
├── level-2/
│   ├── exercise-1/
│   │   ├── public/
│   │   │   └── index.php
│   │   └── src/
│   │       ├── Drums.php
│   │       ├── Guitar.php
│   │       ├── Piano.php
│   │       └── PlayInstrument.php
│   │
│   └── exercise-2/
│       ├── public/
│       │   └── index.php
│       └── src/
│           ├── ElectricHeater.php
│           ├── IHeat.php
│           ├── IMachineActions.php
│           ├── IWash.php
│           └── WashingMachine.php
│
├── level-3/
│   └── exercise-1/
│       ├── public/
│       │   └── index.php
│       └── src/
│           ├── Character.php
│           ├── Ghost.php
│           ├── Hero.php
│           └── IAttacker.php
│
├── .gitignore
└── README.md
```

---

## ⭐ Exercises

This task includes multiple exercises grouped by SOLID principles:

⭐ **Level 1**
* S — Single Responsibility Principle
* D — Dependency Inversion Principle

⭐⭐ **Level 2**
* O — Open/Closed Principle
* I — Interface Segregation Principle

⭐⭐⭐ **Level 3**
* L — Liskov Substitution Principle

👉 Each exercise contains refactored code applying SOLID principles.

---

## ✅ Progress

### Level 1

* [x] 1. Single Responsibility Principle (S)
* [x] 2. Dependency Inversion Principle (D)

### Level 2

* [x] 1. Open/Closed Principle (O)
* [x] 2. Interface Segregation Principle (I)

### Level 3

* [x] 1. Liskov Substitution Principle (L)

---

## 🧠 Notes

* The goal is not to create new functionality, but to improve existing code.
* Each exercise demonstrates how a specific SOLID principle can be applied.
* Code is organized to clearly separate responsibilities and improve scalability.
* Every exercise is independent and can be executed individually.