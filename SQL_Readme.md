Group Table:
![image](https://user-images.githubusercontent.com/77209365/178926352-6c93d35e-3430-47af-9569-06b863b44ca7.png)

Teacher table:
![image](https://user-images.githubusercontent.com/77209365/178926570-42c180dd-323e-4e7c-a4c8-02c6522efbed.png)

with foreign key 
![image](https://user-images.githubusercontent.com/77209365/178926804-a23fc4ee-945c-4037-9173-2e125472d835.png)


Student Table:
![image](https://user-images.githubusercontent.com/77209365/178926920-6f853705-1cfc-4e48-9317-b9d00b40418b.png)
 with foreign key
 ![image](https://user-images.githubusercontent.com/77209365/178927004-5471ab6c-851b-42e8-b4af-d0808bbb916c.png)

how this SQL schema was generated:
![image](https://user-images.githubusercontent.com/77209365/178932968-e6f86148-e235-4b34-a157-25b248486c04.png)

```SQL
create table group_table
(
    id   int auto_increment
        primary key,
    name tinytext null,
    constraint group_table_id_uindex
        unique (id)
);

create table teacher_table
(
    id       int auto_increment
        primary key,
    name     tinytext null,
    group_id int      null,
    constraint teacher_table_id_uindex
        unique (id),
    constraint teacher_table_group_table_id_fk
        foreign key (group_id) references group_table (id)
);

create table user_table
(
    id       int auto_increment
        primary key,
    name     tinytext null,
    group_id int      null,
    constraint user_table_id_uindex
        unique (id),
    constraint user_table_group_table_id_fk
        foreign key (group_id) references group_table (id)
);
```
