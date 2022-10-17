package com.example.visitmanagement;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.RecyclerView;

import android.content.Intent;
import android.os.Bundle;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import org.w3c.dom.Text;

import java.util.ArrayList;

public class menu<PersonalData, UsersAdapter> extends AppCompatActivity {

    private TextView tv_id;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_menu);


        tv_id = findViewById(R.id.tv_id);

        Intent intent=getIntent();
        String ID=intent.getStringExtra("ID");
        tv_id.setText(ID);

        //마이페이지 클릭시
        Button mypage_btn= findViewById(R.id.btn_mypage);
        mypage_btn.setOnClickListener(view -> {
            Intent intent_mypage=new Intent(getApplicationContext(),mypage.class);
            intent_mypage.putExtra("ID", ID);
            startActivity(intent_mypage);
        });
        //방문신청 클릭시
        Button resrevation_btn= findViewById(R.id.btn_reservation);
        resrevation_btn.setOnClickListener(view -> {
            Intent intent_reservation=new Intent(getApplicationContext(),reservations.class);
            startActivity(intent_reservation);
        });

    }}