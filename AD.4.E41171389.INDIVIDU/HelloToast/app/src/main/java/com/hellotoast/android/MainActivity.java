package com.hellotoast.android;

import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.util.Log;
import android.view.View;
import android.widget.TextView;
import android.widget.Toast;


public class MainActivity extends AppCompatActivity {

    private int mCount = 0;
    private int i= 10;
    private int data = 10;
    private TextView mShowCount;



    @Override protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        mShowCount = (TextView) findViewById(R.id.show_count);

    }

    public void countUp(View view) {

        mCount++;
        if (mCount == data) {
            Log.d("MainActivity", "Kelipatan "+data+"");
            Toast toast = Toast.makeText(this,"Data ="+data+"", Toast.LENGTH_LONG);
            toast.show();
            data += i;
        }
        if (mShowCount != null)
            mShowCount.setText(Integer.toString(mCount));

    }

    public void showToast(View view) {
        mCount = 0;
        mShowCount.setText(Integer.toString(mCount));

    }

}
