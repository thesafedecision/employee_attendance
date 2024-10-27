// script.js

const users = [
    { username: 'admin', role: 'مدير', password: 'admin123' },
    { username: 'attendance_employee', role: 'موظف الحضور', password: 'emp123' },
    { username: 'employee1', role: 'موظف', password: 'emp1pass' },
    { username: 'employee2', role: 'موظف', password: 'emp2pass' }
];

// دالة لمصادقة المستخدم
function authenticate(username, password) {
    const user = users.find(user => user.username === username && user.password === password);
    if (user) {
        alert(`مرحبًا، ${user.role}!`);
    } else {
        alert('اسم المستخدم أو كلمة المرور غير صحيحة.');
    }
}

// مثال على الاستخدام
authenticate('admin', 'admin123'); // استدعِ هذه الدالة مع إدخال المستخدم