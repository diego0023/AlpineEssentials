export default () => {
    return {
        tasks: [],
        newTask: '',


        submit() {
            this.tasks.push({
                body: newTask,
                completed: false
            });

            this.newTask='';
        }
    };

}
