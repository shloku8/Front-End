//creating objects through literals
var person=
{
	f_name:"Ram",
	l_name:"Kumar",
	age:21,
	full_name:function()
	{
		return this.f_name+this.l_name
	}
}
console.log(person);
console.log(person.full_name());
//creating object through constructor
function batsman(name, run_scored, balls_faced, average)
	{
		this.name=name;
		this.run_scored=run_scored;
		this.balls_faced=balls_faced;
		this.average=average;
		this.strike_rate=function()
        {
 	      return this.run_scored/this.balls_faced
        }
	}
console.log(batsman);
dhoni=new batsman("Dhoni", 10034, 1075, 104);
console.log(dhoni);
kohli=new batsman("Kohli", 5675, 2375, 96);
console.log(kohli);
roy=new batsman("Roy", 4334, 2075, 78);
console.log(roy);
console.log(dhoni.strike_rate());
//creating object directly through new object
var human=new Object();
human.age=10;
human.name="Raj";
console.log(human);