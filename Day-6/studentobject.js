var studentList = [
    { name: 'Diksha', roll_no: 5045, phone: 9511603896, department: 'CSE', hobbies: ['painting', 'cooking', 'reading'] },
    { name: 'Nikita', roll_no: 5044, phone: 8511603896, department: 'CSE', hobbies: ['music', 'danceing', 'writing'] },
    { name: 'Sonu', roll_no: 5043, phone: 9711603896, department: 'CSE', hobbies: ['coding', 'cooking', 'learning tech.'] },
    { name: 'Jenny', roll_no: 5042, phone: 9661603896, department: 'CSE', hobbies: ['cooking', 'sports', 'reading'] },
    { name: 'Radha', roll_no: 5041, phone: 9011603896, department: 'CSE', hobbies: ['reading', 'painting', 'Dancing'] }
]

console.log('******** Details of all objects*******');

studentList.forEach(Element => {
    for (const key in Element) {
        var std = Element[key];
        if (std instanceof Array) {
            for (const key in std) {
                console.log('hobbies:' + std[key]);
            }
        }
        else
            console.log(std);
    }
});