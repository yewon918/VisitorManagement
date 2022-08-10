package com.example.visitmanagement;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Spinner;
import android.widget.TextView;

import androidx.appcompat.app.AppCompatActivity;
public class reservationform extends AppCompatActivity {
    TextView textView;
    String[] items={"부서1", "부서2", "부서3"};

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_reservationform);

       /* textView=findViewById(R.id.place_text);
        Spinner spinner=findViewById(R.id.spinner);
        ArrayAdapter<String> adapter= new ArrayAdapter<String>(
                this, android.R.layout.simple_spinner_item,items);
        adapter.setDropDownViewResource(
                android.R.layout.simple_spinner_dropdown_item);
        spinner.setAdapter(adapter);

        spinner.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {
            @Override
            public void onItemSelected(AdapterView<?> parent, View view, int position, long id) {
                textView.setText(items[position]);
            }

            @Override
            public void onNothingSelected(AdapterView<?> parent) {textView.setText("");}
        });*/
    }

}
